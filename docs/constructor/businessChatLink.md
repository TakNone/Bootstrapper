# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 225

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
	link : 'taYu1ZBjOVM5DClc',
	message : 'jGw5ytmb4qxPka3o',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 30,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 47,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 72,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 57,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 25,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 51,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 77,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 43,
			language : 'Hnv5tI0ehB6L7rsg',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 44,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : 1262501618480346905,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 76,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 73,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 86,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 70,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 54,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 36,
			document_id : 4411495135125432373,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 85,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 65,
			date : 64,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 61,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 12,
			old_text : '7weCQENg0Zk6FDlm',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 42,
		),
	),
	title : 'PA1Q5lxnkJthKZOY',
	views : 59,
);
```