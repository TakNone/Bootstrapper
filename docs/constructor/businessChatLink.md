# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 227

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
	link : '7PzlGOiNEBcnt85e',
	message : 'gnB7ISofmMujtsFc',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 42,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 14,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 45,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 81,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 3,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 30,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 29,
			language : 'g2NMGekf9LHmx0IR',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 34,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : 265047831948185531,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 93,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 53,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 67,
			document_id : -2066504768541875535,
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
			length : 15,
			date : 53,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 50,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 41,
			old_text : 'YcNXbKDwMsZmpniS',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 3,
		),
	),
	title : 'xdTML7weBpRbWnaJ',
	views : 82,
);
```