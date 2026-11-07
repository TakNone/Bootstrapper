# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 229

```tl
inputBusinessChatLink#11679fa7 flags:# message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string = InputBusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **title** | [`flags.1?string`](type/string) | Human-readable name of the link, to simplify management in the UI (only visible to the creator of the link) |

---

## Type

[InputBusinessChatLink](type/InputBusinessChatLink)

---

## Example

```php
$inputBusinessChatLink = $client->inputBusinessChatLink(
	message : '6qk0QI3UW8pFL1gf',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 91,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 15,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 81,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 21,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 37,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 81,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 5,
			language : 'nSlEJqyU7Lc81TMf',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 26,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : 2980911903195954237,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 33,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 86,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 40,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 85,
			document_id : -2971353351457321954,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 36,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 34,
			date : 31,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 37,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 30,
			old_text : 'm1znVAw7CsrfSa4J',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 30,
		),
	),
	title : 'qTCoicGWJ1pVEPH2',
);
```