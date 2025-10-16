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
		id : 8443354076128032095,
		access_hash : -532682034459841301,
	),
	random_id : 7453190575215123012,
	message : $client->textWithEntities(
		text : 'u8CiRc9Qe0vNKTnd',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 28,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 44,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 37,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 17,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 50,
				language : 'Nyr8SL1OV6hY4wtB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 29,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 3,
				user_id : -3123833605965117066,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 94,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 75,
				document_id : -6223441871143293376,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 86,
			),
		),
	),
);
```