# phone.sendGroupCallMessage

**Layer** : 218

```tl
phone.sendGroupCallMessage#87893014 call:InputGroupCall random_id:long message:TextWithEntities = Bool;
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
$bool = $client->phone->sendGroupCallMessage(
	call : $client->inputGroupCall(
		id : -4053397964720069668,
		access_hash : 2388321905863901135,
	),
	random_id : 2177934030663471380,
	message : $client->textWithEntities(
		text : 'nZHx0AkWEasov2iN',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 16,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 77,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 81,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 69,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 36,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 92,
				language : '9W3hcOo6RK1vw8mf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 14,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : -340843714910378688,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 8,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 75,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 82,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 57,
				document_id : 727761842113194177,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 75,
			),
		),
	),
);
```