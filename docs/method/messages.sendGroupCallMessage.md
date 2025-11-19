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
		id : -3656510607356265159,
		access_hash : 7427504282863845379,
	),
	random_id : -60184871113830811,
	message : $client->textWithEntities(
		text : 'mIrJe3a8Yvhn5QlU',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 7,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 42,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 26,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 97,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 86,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 9,
				language : 'BwJiaRseDvpQltcV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : 5999092860381214380,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 47,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 77,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 87,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 72,
				document_id : 594149774329214929,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 70,
			),
		),
	),
	allow_paid_stars : 7127240051040806846,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```