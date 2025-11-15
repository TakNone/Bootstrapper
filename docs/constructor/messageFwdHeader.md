# messageFwdHeader

**Description** : *Info about a forwarded message*

**Layer** : 216

```tl
messageFwdHeader#4e4df4bb flags:# imported:flags.7?true saved_out:flags.11?true from_id:flags.0?Peer from_name:flags.5?string date:int channel_post:flags.2?int post_author:flags.3?string saved_from_peer:flags.4?Peer saved_from_msg_id:flags.4?int saved_from_id:flags.8?Peer saved_from_name:flags.9?string saved_date:flags.10?int psa_type:flags.6?string = MessageFwdHeader;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **imported** | [`flags.7?true`](type/true) | Whether this message was imported from a foreign chat service, click here for more info » |
| **saved_out** | [`flags.11?true`](type/true) | Only for messages forwarded to saved messages », set if the original message was outgoing (though the message may have been originally outgoing even if this flag is not set, if from_id points to the current user) |
| **from_id** | [`flags.0?Peer`](type/Peer) | The ID of the user that originally sent the message |
| **from_name** | [`flags.5?string`](type/string) | The name of the user that originally sent the message |
| <mark>date</mark> | [`int`](type/int) | When was the message originally sent |
| **channel_post** | [`flags.2?int`](type/int) | ID of the channel message that was forwarded |
| **post_author** | [`flags.3?string`](type/string) | For channels and if signatures are enabled, author of the channel message |
| **saved_from_peer** | [`flags.4?Peer`](type/Peer) | Only for messages forwarded to saved messages », contains the dialog where the message was originally sent |
| **saved_from_msg_id** | [`flags.4?int`](type/int) | Only for messages forwarded to saved messages », contains the original ID of the message in saved_from_peer |
| **saved_from_id** | [`flags.8?Peer`](type/Peer) | Only for forwarded messages reforwarded to saved messages », contains the sender of the original message (i.e. if user A sends a message, then user B forwards it somewhere, then user C saves it to saved messages, this field will contain the ID of user B and from_id will contain the ID of user A) |
| **saved_from_name** | [`flags.9?string`](type/string) | Only for forwarded messages from users with forward privacy enabled, sent by users with forward privacy enabled, reforwarded to saved messages », contains the sender of the original message (i.e. if user A (fwd privacy enabled) sends a message, then user B (fwd privacy enabled) forwards it somewhere, then user C saves it to saved messages, this field will contain the name of user B and from_name will contain the name of user A) |
| **saved_date** | [`flags.10?int`](type/int) | Only for forwarded messages reforwarded to saved messages », indicates when was the original message sent (i.e. if user A sends a message @ unixtime 1, then user B forwards it somewhere @ unixtime 2, then user C saves it to saved messages @ unixtime 3, this field will contain 2, date will contain 1 and the date of the containing message will contain 3) |
| **psa_type** | [`flags.6?string`](type/string) | PSA type |

---

## Type

[MessageFwdHeader](type/MessageFwdHeader)

---

## Example

```php
$messageFwdHeader = $client->messageFwdHeader(
	imported : true,
	saved_out : true,
	from_id : $client->peerUser(
		user_id : -6537082681293287410,
	),
	from_name : '8QZ3Je9vIaxcmn1s',
	date : 81,
	channel_post : 85,
	post_author : 'bZeTGtsHrj427hAB',
	saved_from_peer : $client->peerUser(
		user_id : -3992881834822979480,
	),
	saved_from_msg_id : 46,
	saved_from_id : $client->peerUser(
		user_id : -3413625265813144092,
	),
	saved_from_name : 'dmqDX3OVAj56ZbvC',
	saved_date : 66,
	psa_type : 'DfLVIcYN6hHaTyMs',
);
```