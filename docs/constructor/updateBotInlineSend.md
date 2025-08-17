# updateBotInlineSend

**Description** : *The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot*

**Layer** : 211

```tl
updateBotInlineSend#12f12a07 flags:# user_id:long query:string geo:flags.0?GeoPoint id:string msg_id:flags.1?InputBotInlineMessageID = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | The user that chose the result |
| <mark>query</mark> | [`string`](type/string) | The query that was used to obtain the result |
| **geo** | [`flags.0?GeoPoint`](type/GeoPoint) | Optional. Sender location, only for bots that require user location |
| <mark>id</mark> | [`string`](type/string) | The unique identifier for the result that was chosen |
| **msg_id** | [`flags.1?InputBotInlineMessageID`](type/InputBotInlineMessageID) | Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotInlineSend(
	user_id : 6414250528355968077,
	query : 'xaELjM3X1A9TmVbn',
	geo : $client->geoPointEmpty(),
	id : 'LX6kzFAEsgGlyPYK',
	msg_id : $client->inputBotInlineMessageID(
		dc_id : 44,
		id : -2561113701344819986,
		access_hash : -2936503420997842690,
	),
);
```