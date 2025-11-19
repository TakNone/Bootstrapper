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
		id : -6165854391215212244,
		access_hash : 32239985086457739,
	),
	random_id : -300307230088144249,
	message : $client->textWithEntities(
		text : 'Elr3IGscPptF7Z6q',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 83,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 34,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 90,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 62,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 46,
				language : 'Ocgk6hoq08SdQJR5',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 36,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 29,
				user_id : -1585784899149868987,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 94,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 5,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 4,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 41,
				document_id : 4254699618676185160,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 87,
			),
		),
	),
);
```