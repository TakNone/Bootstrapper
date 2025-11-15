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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	link : 'GukzoHqbJne1PlIj',
	message : 'DNJ5ibrLm0GxYc13',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 68,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 73,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 12,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 83,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 21,
			language : 'f3TqgRcjiYQlAJO9',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 38,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 72,
			user_id : -1227672738829331498,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 16,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 88,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 38,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 56,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 67,
			document_id : -5693589362581810402,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 32,
		),
	),
	title : 'tiMp0kbWSDE8A3lF',
	views : 30,
);
```