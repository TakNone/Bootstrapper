# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 218

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
	text : 'QirL9AzF7StUjGmn',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 76,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 44,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 46,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 42,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 77,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 90,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 17,
			language : 'LkGv8A7nTgW4xZ6t',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 0,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : 4882611798049200594,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 8,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 24,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 54,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 42,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 23,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 38,
			document_id : -3729765138715965996,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 47,
		),
	),
);
```