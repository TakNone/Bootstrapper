# updates.getDifference

**Description** : *Get new updates*

**Layer** : 214

```tl
updates.getDifference#19c2f763 flags:# pts:int pts_limit:flags.1?int pts_total_limit:flags.0?int date:int qts:int qts_limit:flags.2?int = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>pts</mark> | [`int`](type/int) | PTS, see updates |
| **pts_limit** | [`flags.1?int`](type/int) | PTS limit |
| **pts_total_limit** | [`flags.0?int`](type/int) | For fast updating: if provided and pts + pts_total_limit < remote pts, updates.differenceTooLong will be returned.Simply tells the server to not return the difference if it is bigger than pts_total_limitIf the remote pts is too big (> ~4000000), this field will default to 1000000 |
| <mark>date</mark> | [`int`](type/int) | date, see updates |
| <mark>qts</mark> | [`int`](type/int) | QTS, see updates |
| **qts_limit** | [`flags.2?int`](type/int) | QTS limit |

---

## Result

[updates.Difference](type/updates.Difference)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CDN_METHOD_INVALID** | `400` | You can't call this method in a CDN DC |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **DATE_EMPTY** | `400` | Date empty |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PERSISTENT_TIMESTAMP_EMPTY** | `400` | Persistent timestamp empty |
| **PERSISTENT_TIMESTAMP_INVALID** | `400` | Persistent timestamp invalid |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USER_NOT_PARTICIPANT** | `400` | You're not a member of this supergroup/channel |

---

## Example

```php
$updatesDifference = $client->updates->getDifference(
	pts : 96,
	pts_limit : 67,
	pts_total_limit : 73,
	date : 43,
	qts : 24,
	qts_limit : 29,
);
```