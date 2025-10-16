# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 216

```tl
messages.botResults#e021f2f6 flags:# gallery:flags.0?true query_id:long next_offset:flags.1?string switch_pm:flags.2?InlineBotSwitchPM switch_webview:flags.3?InlineBotWebView results:Vector<BotInlineResult> cache_time:int users:Vector<User> = messages.BotResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **gallery** | [`flags.0?true`](type/true) | Whether the result is a picture gallery |
| <mark>query_id</mark> | [`long`](type/long) | Query ID |
| **next_offset** | [`flags.1?string`](type/string) | The next offset to use when navigating through results |
| **switch_pm** | [`flags.2?InlineBotSwitchPM`](type/InlineBotSwitchPM) | Shown as a button on top of the remaining inline result list; if clicked, redirects the user to a private chat with the bot with the specified start parameter |
| **switch_webview** | [`flags.3?InlineBotWebView`](type/InlineBotWebView) | Shown as a button on top of the remaining inline result list; if clicked, opens the specified inline mode mini app |
| <mark>results</mark> | [`Vector<BotInlineResult>`](type/BotInlineResult) | The results |
| <mark>cache_time</mark> | [`int`](type/int) | Caching validity of the results |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the results |

---

## Type

[messages.BotResults](type/messages.BotResults)

---

## Example

```php
$messagesBotResults = $client->messages->botResults(
	gallery : true,
	query_id : 5243896639102313907,
	next_offset : '2FSDqrWGbUOjd4wI',
	switch_pm : $client->inlineBotSwitchPM(
		text : '4UofCSI06gTrn12h',
		start_param : 'wbrS1CdRvKh0AINf',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'xJwsei25zDIVgtYu',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'kwMf5xOSlDgZ0pq2',
			type : '8clQVHehOb2rmaGu',
			title : 'GrZtFXl0uaUP5Iwk',
			description : 'QxNp6yGwJWq2Bl8T',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -8287028529773401123,
				size : 70,
				mime_type : 'lfST98ydPxHseqEo',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 5931299863045367849,
				size : 12,
				mime_type : '85TZBQxiHL9rAbGU',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'aMgkZ76movdFyncR',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				reply_markup : $client->replyKeyboardHide(...),
			),
		),
		$client->botInlineMediaResult(
			id : 'BbkKcjXqP2SLWNfs',
			type : '1mfTSXywKUsBeZVu',
			photo : $client->photoEmpty(
				id : -4442694790093229667,
			),
			document : $client->documentEmpty(
				id : -6416136459921604203,
			),
			title : 'DHciZLY5OIu2UBXt',
			description : 'AB5j3nCMGVeDKuQo',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'UMkj54vcFL9Z3Ttp',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				reply_markup : $client->replyKeyboardHide(...),
			),
		),
	),
	cache_time : 48,
	users : array(
		$client->userEmpty(
			id : 7131928375439737456,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 3054247281482217325,
			access_hash : 3572601659904441045,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5o1kdqUKe8yDNijO',
					reason : 'ShWBfQF5Ys0yLczT',
					text : 'D8j4x7HvaGfgQnhK',
				),
			),
			bot_inline_placeholder : 'dgcUJYfHxnD2NrSP',
			lang_code : '97dMeaw1U2NBWm8H',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 21,
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 5426242700660661116,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : -5954651002500695880,
			),
			bot_active_users : 47,
			bot_verification_icon : -1948466015827015232,
			send_paid_messages_stars : 4407141446493885272,
		),
	),
);
```