# account.setGlobalPrivacySettings

**Description** : *Set global privacy settings*

**Layer** : 214

```tl
account.setGlobalPrivacySettings#1edaaac2 settings:GlobalPrivacySettings = GlobalPrivacySettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>settings</mark> | [`GlobalPrivacySettings`](type/GlobalPrivacySettings) | Global privacy settings |

---

## Result

[GlobalPrivacySettings](type/GlobalPrivacySettings)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AUTOARCHIVE_NOT_AVAILABLE** | `400` | The autoarchive setting is not available at this time: please check the value of the autoarchive_setting_available field in client config » before calling this method |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$globalPrivacySettings = $client->account->setGlobalPrivacySettings(
	settings : $client->globalPrivacySettings(
		archive_and_mute_new_noncontact_peers : true,
		keep_archived_unmuted : true,
		keep_archived_folders : true,
		hide_read_marks : true,
		new_noncontact_peers_require_premium : true,
		display_gifts_button : true,
		noncontact_peers_paid_stars : 1022062401056857454,
		disallowed_gifts : $client->disallowedGiftsSettings(
			disallow_unlimited_stargifts : true,
			disallow_limited_stargifts : true,
			disallow_unique_stargifts : true,
			disallow_premium_gifts : true,
		),
	),
);
```