# messages.sendGroupCallMessage

**Layer** : 218

```tl
messages.sendGroupCallMessage#b1d11410 flags:# call:InputGroupCall random_id:long message:TextWithEntities allow_paid_stars:flags.0?long send_as:flags.1?InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
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
$updates = $client->messages->sendGroupCallMessage(
	call : $client->inputGroupCall(
		id : -3381421800690160780,
		access_hash : -3469254446714057274,
	),
	random_id : -3973900037615686154,
	message : $client->textWithEntities(
		text : 'W3yPZmHBobUwS0AK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 39,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 75,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 40,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 68,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 52,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 72,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 45,
				language : 'c8Nnba40pZqPJ1WY',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 70,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 97,
				user_id : 5931997849383984871,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 41,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 29,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 71,
				document_id : 4447382558441266420,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 95,
			),
		),
	),
	allow_paid_stars : 1033866180858482528,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```