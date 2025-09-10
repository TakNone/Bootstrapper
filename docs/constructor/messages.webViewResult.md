# messages.webViewResult

**Layer** : 214

```tl
messages.webViewResult#aadf159b result:BotInlineResult users:Vector<User> = messages.WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>result</mark> | [`BotInlineResult`](type/BotInlineResult) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[messages.WebViewResult](type/messages.WebViewResult)

---

## Example

```php
$messagesWebViewResult = $client->messages->webViewResult(
	result : $client->botInlineResult(
		id : 'Fda0Hx9VgN7JksSA',
		type : '04yKijZfkU8AM7gP',
		title : 'wUremQtP81YVziv3',
		description : 'rMmUTHDB8NPFopie',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 1283373442411338613,
			size : 28,
			mime_type : 'rklpoRKPA1587LOW',
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
			access_hash : -4527359760459131828,
			size : 0,
			mime_type : 'saMToQAp6HLi72bd',
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
			message : 'IVRLyht50YEpr6jK',
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
	users : array(
		$client->userEmpty(
			id : -8866243835733781822,
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
			id : 6427057298875711922,
			access_hash : 7735166688357080283,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mWdYXLiCF5R7KyoP',
					reason : 'Uwc35lmZuRdSFBEq',
					text : '0RPuArz2kT1dwKUW',
				),
			),
			bot_inline_placeholder : 'A7UZL4u3VbaFRsq9',
			lang_code : 'bVc3ZFG6gjm2IYoQ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 85,
				background_emoji_id : -2760867945286985948,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : -5953185840069486475,
			),
			bot_active_users : 98,
			bot_verification_icon : -324499893751032288,
			send_paid_messages_stars : 2847284753182572366,
		),
	),
);
```