# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 233

```tl
businessChatLink#b4ae666f flags:# link:string message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string views:int = BusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>link</mark> | [`string`](type/string) | Business chat deep link |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **title** | [`flags.1?string`](type/string) | Human-readable name of the link, to simplify management in the UI (only visible to the creator of the link) |
| <mark>views</mark> | [`int`](type/int) | Number of times the link was resolved (clicked/scanned/etc...) |

---

## Type

[BusinessChatLink](type/BusinessChatLink)

---

## Example

```php
$businessChatLink = $client->businessChatLink(
	link : 'ZxJ7q1s6tfr4HD5i',
	message : 'jAC6fQLbTI3hq1FE',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 8,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 45,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 90,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 29,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 30,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 0,
			language : 'Wbejsx9O8oVup5AL',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 18,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 48,
			user_id : -1512740905539441811,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 45,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 94,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 60,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 69,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 68,
			document_id : 6923353072432622315,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 45,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 13,
			date : 61,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 58,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 76,
			old_text : 'DFTpj9ALSbQHmOMy',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 21,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 49,
		),
	),
	title : 'd526vSiuT0ltrcUV',
	views : 90,
);
```