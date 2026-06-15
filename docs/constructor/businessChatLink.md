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
	link : 'Zugqori1lOvhVmK8',
	message : '8qL5kbQxmeAvNRWj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 89,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 85,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 47,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 29,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 68,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 64,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 33,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 29,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 15,
			language : 't7GXhruRzU5PJNfn',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 47,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : 8161889837889040110,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 54,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 67,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 38,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 9,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 100,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 100,
			document_id : -6044507567326643916,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 0,
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
			date : 95,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 22,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 74,
			old_text : 'ovxuKPX3FmJbO7Bc',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 76,
		),
	),
	title : 'CZksHYdKN9i5wmav',
	views : 68,
);
```