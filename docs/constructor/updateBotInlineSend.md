# updateBotInlineSend

**Description** : *The result of an inline query that was chosen by a user and sent to their chat partner\. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot*

**Layer** : 218

```tl
updateBotInlineSend#12f12a07 flags:# user_id:long query:string geo:flags.0?GeoPoint id:string msg_id:flags.1?InputBotInlineMessageID = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	user_id : 5407693326098457947,
	query : '0D9OwaEv8CB7KdPJ',
	geo : $client->geoPointEmpty(),
	id : 'GabFvXRDjtEshAdC',
	msg_id : $client->inputBotInlineMessageID(
		dc_id : 89,
		id : 8135528789530935029,
		access_hash : 9027477523536932930,
	),
);
```