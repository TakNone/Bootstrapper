# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 214

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
	link : '4pU3glzQoFIv0Xty',
	message : 'QB3UIdHmDMlKypxg',
	entities : array(
		$client->messageEntityUnknown(
			offset : 96,
			length : 85,
		),
		$client->messageEntityMention(
			offset : 11,
			length : 32,
		),
		$client->messageEntityHashtag(
			offset : 37,
			length : 3,
		),
		$client->messageEntityBotCommand(
			offset : 41,
			length : 9,
		),
		$client->messageEntityUrl(
			offset : 89,
			length : 42,
		),
		$client->messageEntityEmail(
			offset : 58,
			length : 25,
		),
		$client->messageEntityBold(
			offset : 10,
			length : 60,
		),
		$client->messageEntityItalic(
			offset : 83,
			length : 9,
		),
		$client->messageEntityCode(
			offset : 16,
			length : 1,
		),
		$client->messageEntityPre(
			offset : 12,
			length : 100,
			language : 'NhKyEz25SbZevfOI',
		),
		$client->messageEntityTextUrl(
			offset : 39,
			length : 48,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 75,
			length : 7,
			user_id : -3616958060040576011,
		),
		$client->inputMessageEntityMentionName(
			offset : 26,
			length : 30,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 34,
			length : 48,
		),
		$client->messageEntityCashtag(
			offset : 38,
			length : 72,
		),
		$client->messageEntityUnderline(
			offset : 25,
			length : 94,
		),
		$client->messageEntityStrike(
			offset : 66,
			length : 23,
		),
		$client->messageEntityBankCard(
			offset : 55,
			length : 61,
		),
		$client->messageEntitySpoiler(
			offset : 48,
			length : 48,
		),
		$client->messageEntityCustomEmoji(
			offset : 88,
			length : 35,
			document_id : -4965062252273207070,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 46,
			length : 89,
		),
	),
	title : '5hHt1euLE7xBidF4',
	views : 61,
);
```