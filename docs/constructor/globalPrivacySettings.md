# globalPrivacySettings

**Description** : *Global privacy settings*

**Layer** : 211

```tl
globalPrivacySettings#fe41b34f flags:# archive_and_mute_new_noncontact_peers:flags.0?true keep_archived_unmuted:flags.1?true keep_archived_folders:flags.2?true hide_read_marks:flags.3?true new_noncontact_peers_require_premium:flags.4?true display_gifts_button:flags.7?true noncontact_peers_paid_stars:flags.5?long disallowed_gifts:flags.6?DisallowedGiftsSettings = GlobalPrivacySettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **archive_and_mute_new_noncontact_peers** | [`flags.0?true`](type/true) | Whether to archive and mute new chats from non-contacts |
| **keep_archived_unmuted** | [`flags.1?true`](type/true) | Whether unmuted chats will be kept in the Archive chat list when they get a new message |
| **keep_archived_folders** | [`flags.2?true`](type/true) | Whether unmuted chats that are always included or pinned in a folder, will be kept in the Archive chat list when they get a new message. Ignored if keep_archived_unmuted is set |
| **hide_read_marks** | [`flags.3?true`](type/true) | If this flag is set, the inputPrivacyKeyStatusTimestamp key will also apply to the ability to use messages.getOutboxReadDate on messages sent to us. Meaning, users that cannot see our exact last online date due to the current value of the inputPrivacyKeyStatusTimestamp key will receive a 403 USER_PRIVACY_RESTRICTED error when invoking messages.getOutboxReadDate to fetch the exact read date of a message they sent to us. The userFull.read_dates_private flag will be set for users that have this flag enabled |
| **new_noncontact_peers_require_premium** | [`flags.4?true`](type/true) | If set, only users that have a premium account, are in our contact list, or already have a private chat with us can write to us; a 403 PRIVACY_PREMIUM_REQUIRED error will be emitted otherwise.  The userFull.contact_require_premium flag will be set for users that have this flag enabled.  To check whether we can write to a user with this flag enabled, if we haven't yet cached all the required information (for example we don't have the userFull or history of all users while displaying the chat list in the sharing UI) the users.getIsPremiumRequiredToContact method may be invoked, passing the list of users currently visible in the UI, returning a list of booleans that directly specify whether we can or cannot write to each user. This option may be enabled by both non-Premium and Premium users only if the new_noncontact_peers_require_premium_without_ownpremium client configuration flag » is equal to true, otherwise it may be enabled only by Premium users and non-Premium users will receive a PREMIUM_ACCOUNT_REQUIRED error when trying to enable this flag |
| **display_gifts_button** | [`flags.7?true`](type/true) | NOTHING |
| **noncontact_peers_paid_stars** | [`flags.5?long`](type/long) | NOTHING |
| **disallowed_gifts** | [`flags.6?DisallowedGiftsSettings`](type/DisallowedGiftsSettings) | NOTHING |

---

## Type

[GlobalPrivacySettings](type/GlobalPrivacySettings)

---

## Example

```php
$globalPrivacySettings = $client->globalPrivacySettings(
	archive_and_mute_new_noncontact_peers : true,
	keep_archived_unmuted : true,
	keep_archived_folders : true,
	hide_read_marks : true,
	new_noncontact_peers_require_premium : true,
	display_gifts_button : true,
	noncontact_peers_paid_stars : 7694311520967560751,
	disallowed_gifts : $client->disallowedGiftsSettings(
		disallow_unlimited_stargifts : true,
		disallow_limited_stargifts : true,
		disallow_unique_stargifts : true,
		disallow_premium_gifts : true,
	),
);
```