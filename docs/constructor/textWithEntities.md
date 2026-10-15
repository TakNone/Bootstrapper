# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 229

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
	text : 'aGD82lhmpgSCLKjB',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 71,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 3,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 77,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 51,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 76,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 41,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 45,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 57,
			language : 'jfsJcO6XrwTukYSC',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 91,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 61,
			user_id : 956337677754748133,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 67,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 3,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 59,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 47,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 6,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 81,
			document_id : -1839508069755627952,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 74,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 35,
			date : 48,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 31,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 64,
			old_text : 'uzIb6SQqDHw5hOoC',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 21,
		),
	),
);
```