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
	text : 'bigxvNuKkD2lJ36B',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 55,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 35,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 25,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 96,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 7,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 63,
			language : 'YbCFSpxZ5ImQ9WTy',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 9,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : -6765009412852356496,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 16,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 7,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 80,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 9,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 65,
			document_id : 6119505269106117085,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 48,
		),
	),
);
```