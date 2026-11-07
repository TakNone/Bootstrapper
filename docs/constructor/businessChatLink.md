# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 229

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
	link : '6B1ReZ4Unvu9dOT0',
	message : 'gEp13Rqe6KGOUaCS',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 45,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 23,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 59,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 97,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 6,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 32,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 88,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 80,
			language : 'hiutnBkQag40W23y',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 50,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : -8173363164276956022,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 20,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 99,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 34,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 27,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 69,
			document_id : 6211771485990573353,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 97,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 71,
			date : 32,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 58,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 19,
			old_text : 'UoBjly47LApEtfKG',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 21,
		),
	),
	title : 'al8mYSrFBcCAfTMQ',
	views : 54,
);
```