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
	text : 'ErxY1I2VztyK3Hfd',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 11,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 81,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 87,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 100,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 46,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 65,
			language : 'Ce1I2jF07XwWQkYh',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 3,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 15,
			user_id : 3487146839693984252,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 35,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 21,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 87,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 88,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 25,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 9,
			document_id : 8254201496030829172,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 1,
		),
	),
);
```