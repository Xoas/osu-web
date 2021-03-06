{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
    See the LICENCE file in the repository root for full licence text.
--}}
@php
    $customization = auth()->user()->profileCustomization();
@endphp
<div class="account-edit">
    <div class="account-edit__section">
        <h2 class="account-edit__section-title">
            {{ trans('accounts.options.title') }}
        </h2>
    </div>

    <div class="account-edit__input-groups">
        <div class="account-edit__input-group">
            <div class="account-edit-entry account-edit-entry--no-label">
                <div class="account-edit-entry__checkboxes-label">
                    {{ trans('accounts.options.beatmapset_download._') }}
                </div>
                <form
                    class="account-edit-entry__checkboxes account-edit-entry__checkboxes--vertical js-account-edit"
                    data-account-edit-auto-submit="1"
                    data-skip-ajax-error-popup="1"
                    data-account-edit-type="radio"
                    data-url="{{ route('account.options') }}"
                    data-field="user_profile_customization[beatmapset_download]"
                >
                    @php
                        $statusIsRendered = false;
                    @endphp
                    @foreach (App\Models\UserProfileCustomization::BEATMAPSET_DOWNLOAD as $name)
                        @if ($name === 'direct' && !auth()->user()->isSupporter())
                            @continue
                        @endif
                        <label
                            class="account-edit-entry__checkbox account-edit-entry__checkbox--inline"
                        >
                            @include('objects._switch', [
                                'checked' => $customization->beatmapset_download === $name,
                                'name' => 'user_profile_customization[beatmapset_download]',
                                'type' => 'radio',
                                'value' => $name,
                            ])

                            <span class="account-edit-entry__checkbox-label">
                                {{ trans("accounts.options.beatmapset_download.{$name}") }}
                            </span>

                            @if (!$statusIsRendered)
                                <div class="account-edit-entry__checkbox-status">
                                    @include('accounts._edit_entry_status')
                                </div>
                                @php
                                    $statusIsRendered = true;
                                @endphp
                            @endif
                        </label>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
