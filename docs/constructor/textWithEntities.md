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
	text : 'l8PKR0JMItGdbxpA',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 53,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 44,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 28,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 50,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 76,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 0,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 66,
			language : 'UiaJFYthAsjX1lEB',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 66,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : 9220869729472876567,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 97,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 56,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 63,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 55,
			document_id : -4564695616542587099,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 8,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 96,
			date : 82,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 72,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 90,
			old_text : '9vWeXx1YdHhAFb53',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 69,
		),
	),
);
```