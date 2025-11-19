# contacts.updateContactNote

**Layer** : 218

```tl
contacts.updateContactNote#139f63fb id:InputUser note:TextWithEntities = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>note</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->contacts->updateContactNote(
	id : $client->get_input_user(user : '@TakNone'),
	note : $client->textWithEntities(
		text : 'WkDLc9hIyoG7UAMu',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 94,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 24,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 60,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 77,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 48,
				language : 'xaicCyvg8R4ulNkE',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 47,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : -1190154616352510137,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 57,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 24,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 45,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 28,
				document_id : 1116375879483797007,
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