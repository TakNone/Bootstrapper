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
		text : 'Z2ghXJ9OpjoKHu1q',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 84,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 33,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 61,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 60,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 96,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 79,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 83,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 40,
				language : 'S61RUgOxzNroXkM9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 22,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : -2661353580726898124,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 78,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 37,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 37,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 76,
				document_id : 3293927295946730198,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 40,
			),
		),
	),
);
```