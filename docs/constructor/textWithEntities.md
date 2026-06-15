# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 227

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
	text : 'I72semSbBXKCOfGU',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 31,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 33,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 0,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 57,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 1,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 13,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 68,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 81,
			language : 'WhjFU36mZXTxlQ8e',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 48,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : -3387562752151167740,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 71,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 86,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 100,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 19,
			document_id : 2100443480746872759,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 58,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 25,
			date : 76,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 12,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 72,
			old_text : '6mf5kpoVBZDbRs1n',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 41,
		),
	),
);
```