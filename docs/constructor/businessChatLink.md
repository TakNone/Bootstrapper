# businessChatLink

**Description** : *Contains info about a business chat deep link &raquo; created by the current account*

**Layer** : 216

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
	link : 'xH9Nin54y7YwD6ez',
	message : 'B620P4YrEDOCyQAk',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 6,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 12,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 97,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 68,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 73,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 95,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 69,
			language : 'JGBpdc6nhsRKYby5',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 5,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 2,
			user_id : -8953709736496439587,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 15,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 96,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 43,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 35,
			document_id : -27847372328880271,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 88,
		),
	),
	title : 'JDKTlZVUj97mtdck',
	views : 93,
);
```