# channels.createChannel

**Description** : *Create a supergroup/channel*

**Layer** : 211

```tl
channels.createChannel#91006707 flags:# broadcast:flags.0?true megagroup:flags.1?true for_import:flags.3?true forum:flags.5?true title:string about:string geo_point:flags.2?InputGeoPoint address:flags.2?string ttl_period:flags.4?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **broadcast** | [`flags.0?true`](type/true) | Whether to create a channel |
| **megagroup** | [`flags.1?true`](type/true) | Whether to create a supergroup |
| **for_import** | [`flags.3?true`](type/true) | Whether the supergroup is being created to import messages from a foreign chat service using messages.initHistoryImport |
| **forum** | [`flags.5?true`](type/true) | Whether to create a forum |
| <mark>title</mark> | [`string`](type/string) | Channel title |
| <mark>about</mark> | [`string`](type/string) | Channel description |
| **geo_point** | [`flags.2?InputGeoPoint`](type/InputGeoPoint) | Geogroup location, see here » for more info on geogroups |
| **address** | [`flags.2?string`](type/string) | Geogroup address, see here » for more info on geogroups |
| **ttl_period** | [`flags.4?int`](type/int) | Time-to-live of all messages that will be sent in the supergroup: once message.date+message.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well. You can use messages.setDefaultHistoryTTL to edit this value later |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ADDRESS_INVALID** | `400` | The specified geopoint address is invalid |
| **CHANNELS_ADMIN_LOCATED_TOO_MUCH** | `400` | The user has reached the limit of public geogroups |
| **CHANNELS_TOO_MUCH** | `400` | You have joined too many channels/supergroups |
| **CHAT_ABOUT_TOO_LONG** | `400` | Chat about too long |
| **CHAT_INVALID** | `500` | Invalid chat |
| **CHAT_TITLE_EMPTY** | `400` | No chat title provided |
| **TTL_PERIOD_INVALID** | `400` | The specified TTL period is invalid |
| **USER_RESTRICTED** | `406` | You're spamreported, you can't create channels or chats |

---

## Example

```php
$updates = $client->channels->createChannel(
	broadcast : true,
	megagroup : true,
	for_import : true,
	forum : true,
	title : 'npfgGcyd7SEzH3xF',
	about : 'QxdcKeNsGXfTDEMW',
	geo_point : $client->inputGeoPointEmpty(),
	address : 'ws7rP2CQlhA8dpkm',
	ttl_period : 91,
);
```