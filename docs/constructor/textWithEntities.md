# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 222

```tl
textWithEntities#751f3146 text:string entities:Vector<MessageEntity> = TextWithEntities;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Text |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[TextWithEntities](type/TextWithEntities)

---

## Example

```php
$textWithEntities = $client->textWithEntities(
	text : '4eVgnKAtaxNYibXF',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 92,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 87,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 5,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 21,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 5,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 8,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 97,
			language : 'HU3kNinG7jSzwBrs',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 96,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 57,
			user_id : 1443402855409351448,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 53,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 22,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 15,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 88,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 27,
			document_id : -3595189172433537309,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 1,
		),
	),
);
```