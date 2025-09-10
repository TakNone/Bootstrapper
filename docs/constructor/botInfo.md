# botInfo

**Description** : *Info about bots \(available bot commands, etc\)*

**Layer** : 214

```tl
botInfo#4d8a0299 flags:# has_preview_medias:flags.6?true user_id:flags.0?long description:flags.1?string description_photo:flags.4?Photo description_document:flags.5?Document commands:flags.2?Vector<BotCommand> menu_button:flags.3?BotMenuButton privacy_policy_url:flags.7?string app_settings:flags.8?BotAppSettings verifier_settings:flags.9?BotVerifierSettings = BotInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_preview_medias** | [`flags.6?true`](type/true) | If set, the bot has some preview medias for the configured Main Mini App, see here » for more info on Main Mini App preview medias |
| **user_id** | [`flags.0?long`](type/long) | ID of the bot |
| **description** | [`flags.1?string`](type/string) | Description of the bot |
| **description_photo** | [`flags.4?Photo`](type/Photo) | Description photo |
| **description_document** | [`flags.5?Document`](type/Document) | Description animation in MPEG4 format |
| **commands** | [`flags.2?Vector<BotCommand>`](type/BotCommand) | Bot commands that can be used in the chat |
| **menu_button** | [`flags.3?BotMenuButton`](type/BotMenuButton) | Indicates the action to execute when pressing the in-UI menu button for bots |
| **privacy_policy_url** | [`flags.7?string`](type/string) | The HTTP link to the privacy policy of the bot. If not set, then the /privacy command must be used, if supported by the bot (i.e. if it's present in the commands vector). If it isn't supported, then https://telegram.org/privacy-tpa must be opened, instead |
| **app_settings** | [`flags.8?BotAppSettings`](type/BotAppSettings) | Mini app » settings |
| **verifier_settings** | [`flags.9?BotVerifierSettings`](type/BotVerifierSettings) | NOTHING |

---

## Type

[BotInfo](type/BotInfo)

---

## Example

```php
$botInfo = $client->botInfo(
	has_preview_medias : true,
	user_id : 5872121431117684502,
	description : 'vDtZipreaXS1V7uw',
	description_photo : $client->photoEmpty(
		id : -3370526823588132771,
	),
	description_document : $client->documentEmpty(
		id : 6304983041421188736,
	),
	commands : array(
		$client->botCommand(
			command : 'IMDCijuNJFk45OEK',
			description : '2ZaTX4OIitJRP5yV',
		),
	),
	menu_button : $client->botMenuButtonDefault(),
	privacy_policy_url : 'https://docs.liveproto.dev',
	app_settings : $client->botAppSettings(
		placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		background_color : 92,
		background_dark_color : 13,
		header_color : 31,
		header_dark_color : 96,
	),
	verifier_settings : $client->botVerifierSettings(
		can_modify_custom_description : true,
		icon : 4872689159808156899,
		company : '3ayLjD1S0PqhMkxB',
		custom_description : 'ZETAx9BpIlc4CPtN',
	),
);
```