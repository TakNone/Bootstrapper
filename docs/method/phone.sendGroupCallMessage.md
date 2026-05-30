# phone.sendGroupCallMessage

**Layer** : 222

```tl
phone.sendGroupCallMessage#b1d11410 flags:# call:InputGroupCall random_id:long message:TextWithEntities allow_paid_stars:flags.0?long send_as:flags.1?InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| <mark>message</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| **allow_paid_stars** | [`flags.0?long`](type/long) | NOTHING |
| **send_as** | [`flags.1?InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->sendGroupCallMessage(
	call : $client->inputGroupCall(
		id : -3822454491377528800,
		access_hash : 9060256312311976598,
	),
	random_id : -5197558297610846740,
	message : $client->textWithEntities(
		text : 'ECrPcJgKwIoS48jR',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 35,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 3,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 8,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 19,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 10,
				language : 'ZPViANE9Qjm73Iuk',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 38,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 31,
				user_id : 7218552583912725262,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 32,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 52,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 82,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 6,
				document_id : 2663404760958239578,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 47,
			),
		),
	),
	allow_paid_stars : 2718094237195113942,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```