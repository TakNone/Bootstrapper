# account.initTakeoutSession

**Description** : *Initialize a takeout session, see here &raquo; for more info*

**Layer** : 216

```tl
account.initTakeoutSession#8ef3eab0 flags:# contacts:flags.0?true message_users:flags.1?true message_chats:flags.2?true message_megagroups:flags.3?true message_channels:flags.4?true files:flags.5?true file_max_size:flags.5?long = account.Takeout;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **contacts** | [`flags.0?true`](type/true) | Whether to export contacts |
| **message_users** | [`flags.1?true`](type/true) | Whether to export messages in private chats |
| **message_chats** | [`flags.2?true`](type/true) | Whether to export messages in basic groups |
| **message_megagroups** | [`flags.3?true`](type/true) | Whether to export messages in supergroups |
| **message_channels** | [`flags.4?true`](type/true) | Whether to export messages in channels |
| **files** | [`flags.5?true`](type/true) | Whether to export files |
| **file_max_size** | [`flags.5?long`](type/long) | Maximum size of files to export |

---

## Result

[account.Takeout](type/account.Takeout)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TAKEOUT_INIT_DELAY_%d** | `420` | Sorry, for security reasons, you will be able to begin downloading your data in %d seconds. We have notified all your devices about the export request to make sure it's authorized and to give you time to react if it's not |

---

## Example

```php
$accountTakeout = $client->account->initTakeoutSession(
	contacts : true,
	message_users : true,
	message_chats : true,
	message_megagroups : true,
	message_channels : true,
	files : true,
	file_max_size : -5307561617495052302,
);
```