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
	id : $client->get_input_user(peer : '@TakNone'),
	note : $client->textWithEntities(
		text : 'JAD5dP6R7k9mupfQ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 89,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 57,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 71,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 65,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 84,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 87,
				language : '3Qcm5EtKwkNLMrJY',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 77,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 37,
				user_id : -2203133525186170934,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 97,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 91,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : -9061414614729756352,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 29,
			),
		),
	),
);
```