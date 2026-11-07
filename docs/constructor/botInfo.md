# botInfo

**Description** : *Info about bots \(available bot commands, etc\)*

**Layer** : 233

```tl
botInfo#4d8a0299 flags:# has_preview_medias:flags.6?true user_id:flags.0?long description:flags.1?string description_photo:flags.4?Photo description_document:flags.5?Document commands:flags.2?Vector<BotCommand> menu_button:flags.3?BotMenuButton privacy_policy_url:flags.7?string app_settings:flags.8?BotAppSettings verifier_settings:flags.9?BotVerifierSettings = BotInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_preview_medias** | [`flags.6?true`](type/true) | If set, the bot has some preview medias for the configured Main Mini App, see here » for more info on Main Mini App preview medias |
| **user_id** | [`flags.0?long`](type/long) | ID of the bot |
| **description** | [`flags.1?string`](type/string) | Description of the bot |
| **description_photo** | [`flags.4?Photo`](type/Photo) | Description photo |
| **description_document** | [`flags.5?Document`](type/Document) | Description animation in MPEG4 format |
| **commands** | [`flags.2?Vector<BotCommand>`](type/BotCommand) | Bot commands that can be used in the chat |
| **menu_button** | [`flags.3?BotMenuButton`](type/BotMenuButton) | Indicates the action to execute when pressing the in-UI menu button for bots |
| **privacy_policy_url** | [`flags.7?string`](type/string) | The HTTP link to the privacy policy of the bot. If not set, then the /privacy command must be used, if supported by the bot (i.e. if it's present in the commands vector). If it isn't supported, then https://telegram.org/privacy-tpa must be opened, instead |
| **app_settings** | [`flags.8?BotAppSettings`](type/BotAppSettings) | Mini app » settings |
| **verifier_settings** | [`flags.9?BotVerifierSettings`](type/BotVerifierSettings) | This bot can verify peers: this field contains more info about the verification the bot can assign to peers |

---

## Type

[BotInfo](type/BotInfo)

---

## Example

```php
$botInfo = $client->botInfo(
	has_preview_medias : true,
	user_id : 2845430748305604475,
	description : 'hQAnl04o89yJ7EDf',
	description_photo : $client->photoEmpty(
		id : -1454543394050695889,
	),
	description_document : $client->documentEmpty(
		id : 5021579894276591523,
	),
	commands : array(
		$client->botCommand(
			ephemeral : true,
			command : 'BYTunXtHvfFl9Uw3',
			description : 'R8OdieDwMWSGgA3h',
		),
	),
	menu_button : $client->botMenuButtonDefault(),
	privacy_policy_url : 'https://docs.liveproto.dev',
	app_settings : $client->botAppSettings(
		placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		background_color : 80,
		background_dark_color : 18,
		header_color : 31,
		header_dark_color : 78,
	),
	verifier_settings : $client->botVerifierSettings(
		can_modify_custom_description : true,
		icon : -1239270351805623011,
		company : 'zo9C2fPFKxJYZIeD',
		custom_description : $client->textWithEntities(
			text : 'Llhbs9GEuH6vqazp',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 95,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 93,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 53,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 99,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 98,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 29,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 48,
					language : 'HJXz7nuOeGZTVl5A',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 59,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : 5608262048777071865,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 100,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 40,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 99,
					document_id : -5775686137419089034,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 91,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 43,
					date : 36,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 46,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 14,
					old_text : 'NWFJjwZ8IOVPlS2z',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 17,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 98,
				),
			),
		),
	),
);
```