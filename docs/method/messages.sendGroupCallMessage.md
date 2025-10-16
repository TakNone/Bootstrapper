# messages.sendGroupCallMessage

**Layer** : 216

```tl
messages.sendGroupCallMessage#87893014 call:InputGroupCall random_id:long message:TextWithEntities = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| <mark>message</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->sendGroupCallMessage(
	call : $client->inputGroupCall(
		id : 4076752453784279018,
		access_hash : 5909424079196498878,
	),
	random_id : 2825661830242293096,
	message : $client->textWithEntities(
		text : 'QoIlnm20utjgR7qW',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 68,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 20,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 63,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 13,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 74,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 44,
				language : 'xyCvWHkVoO4RP7M2',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 24,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 46,
				user_id : -9201925446683120727,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 96,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 27,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 24,
				document_id : 3223003495360324349,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 47,
			),
		),
	),
);
```