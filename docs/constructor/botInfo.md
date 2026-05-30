# botInfo

**Description** : *Info about bots \(available bot commands, etc\)*

**Layer** : 225

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
	user_id : -2741511791961448505,
	description : '3ufR1THDK9bcMEzC',
	description_photo : $client->photoEmpty(
		id : -6019153149020103103,
	),
	description_document : $client->documentEmpty(
		id : -299566523366635499,
	),
	commands : array(
		$client->botCommand(
			command : 'nAV3kylYduK29FvT',
			description : 'pPX9Tc8aVQJtqmLM',
		),
	),
	menu_button : $client->botMenuButtonDefault(),
	privacy_policy_url : 'https://docs.liveproto.dev',
	app_settings : $client->botAppSettings(
		placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		background_color : 41,
		background_dark_color : 66,
		header_color : 16,
		header_dark_color : 64,
	),
	verifier_settings : $client->botVerifierSettings(
		can_modify_custom_description : true,
		icon : -6457278840114994465,
		company : 'RgHa2SUzD7Ns9AoX',
		custom_description : 'FzDwbURPrYqyhL2a',
	),
);
```