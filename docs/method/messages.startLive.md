# messages.startLive

**Layer** : 218

```tl
messages.startLive#d069ccde flags:# pinned:flags.2?true noforwards:flags.4?true rtmp_stream:flags.5?true messages_enabled:flags.6?true send_paid_messages_stars:flags.7?long peer:InputPeer caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **pinned** | [`flags.2?true`](type/true) | NOTHING |
| **noforwards** | [`flags.4?true`](type/true) | NOTHING |
| **rtmp_stream** | [`flags.5?true`](type/true) | NOTHING |
| **messages_enabled** | [`flags.6?true`](type/true) | NOTHING |
| **send_paid_messages_stars** | [`flags.7?long`](type/long) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **caption** | [`flags.0?string`](type/string) | NOTHING |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | NOTHING |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->startLive(
	pinned : true,
	noforwards : true,
	rtmp_stream : true,
	messages_enabled : true,
	send_paid_messages_stars : -5428638657404355150,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	caption : 'Di6I8YhVALuOr4FH',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 77,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 18,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 91,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 64,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 42,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 72,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 1,
			language : 'cfbC1mLR03KONQrB',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 65,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : -2138053017344448856,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 99,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 61,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 35,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 57,
			document_id : -5530523288014274317,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 73,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array($client->get_input_user(peer : '@TakNone')),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array($client->get_input_user(peer : '@TakNone')),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(8273243136868571758),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(8104074707476679244),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 8902731929445850010,
);
```