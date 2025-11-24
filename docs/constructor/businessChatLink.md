# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 218

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
	link : 'CXmOfY743xoa0zqc',
	message : 'vLyNi89zwtBFqxEH',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 0,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 95,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 45,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 35,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 8,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 67,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 33,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 27,
			language : 'XUFGJw68sqkZoijh',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 84,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 2,
			user_id : -4314039998826901860,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 42,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 18,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 10,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 42,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 54,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 75,
			document_id : -837939119684418108,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 19,
		),
	),
	title : '5xz0UDOVCdfT9HQb',
	views : 35,
);
```