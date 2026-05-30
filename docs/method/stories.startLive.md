# stories.startLive

**Layer** : 222

```tl
stories.startLive#d069ccde flags:# pinned:flags.2?true noforwards:flags.4?true rtmp_stream:flags.5?true peer:InputPeer caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long messages_enabled:flags.6?Bool send_paid_messages_stars:flags.7?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **pinned** | [`flags.2?true`](type/true) | NOTHING |
| **noforwards** | [`flags.4?true`](type/true) | NOTHING |
| **rtmp_stream** | [`flags.5?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **caption** | [`flags.0?string`](type/string) | NOTHING |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | NOTHING |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| **messages_enabled** | [`flags.6?Bool`](type/Bool) | NOTHING |
| **send_paid_messages_stars** | [`flags.7?long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->stories->startLive(
	pinned : true,
	noforwards : true,
	rtmp_stream : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	caption : 'EkAuegOTt3K1iGvd',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 7,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 46,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 28,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 81,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 8,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 62,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 91,
			language : 'oCqmtIWxFKB4H3rQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 14,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 45,
			user_id : -5376844015647049798,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 34,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 36,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 95,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 85,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 54,
			document_id : 8759789887735823509,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 7,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-7256227665865046437),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-4573406445463387381),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -4767680789167005407,
	messages_enabled : true,
	send_paid_messages_stars : -6111691992280108103,
);
```