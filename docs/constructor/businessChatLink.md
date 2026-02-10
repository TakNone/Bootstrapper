# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 222

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
	link : 'ujbK3X9dn1or7H4U',
	message : '7ZxicLetOH4aGuQr',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 17,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 99,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 5,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 54,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 56,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 23,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 15,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 47,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 40,
			language : '2ZfDEOknVdI6wq8z',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 86,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : 3862935958547916725,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 76,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 78,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 84,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 14,
			document_id : 4874126541247399427,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 40,
		),
	),
	title : 'lTn4pXRieILFS80H',
	views : 8,
);
```