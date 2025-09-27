# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 216

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **posts_between** | [`flags.0?int`](type/int) | If set, specifies the minimum number of messages between shown sponsored messages; otherwise, only one sponsored message must be shown after all ordinary messages |
| **start_delay** | [`flags.1?int`](type/int) | NOTHING |
| **between_delay** | [`flags.2?int`](type/int) | NOTHING |
| <mark>messages</mark> | [`Vector<SponsoredMessage>`](type/SponsoredMessage) | Sponsored messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the sponsored messages |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the sponsored messages |

---

## Type

[messages.SponsoredMessages](type/messages.SponsoredMessages)

---

## Example

```php
$messagesSponsoredMessages = $client->messages->sponsoredMessages(
	posts_between : 46,
	start_delay : 39,
	between_delay : 61,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : '6LOZukmwBY4zGbgh',
			message : 'sAUfEFLTOC8q049d',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 56,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 19,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 13,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 77,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 56,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 45,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 90,
					language : 'Y1vOwK3GPRWTjE76',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 66,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 72,
					user_id : -6396655989420646229,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 1,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 17,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 82,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 10,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 72,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 85,
					document_id : 7897727828854535022,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 77,
				),
			),
			photo : $client->photoEmpty(
				id : 93558740015243412,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 18,
				background_emoji_id : -5200586017507899235,
			),
			button_text : 'w0CSyYVpGmu15HOW',
			sponsor_info : 'u5kYzOHR7eEFl6iq',
			additional_info : 'pUKR7EVtYgCJQ2i9',
			min_display_duration : 32,
			max_display_duration : 7,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2763127259860451190,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4861666182963866683,
			title : '5pkrsYZKMmbDouO2',
			photo : $client->chatPhotoEmpty(),
			participants_count : 0,
			date : 54,
			version : 32,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : 4053561657644644864,
			title : 'OAQ4hbwrgtWpyNKZ',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 5242838735465790096,
			access_hash : -7721343756848112167,
			title : 'Jek2VPfrRIFoC54N',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZxRHs8c3wP0LIUuh',
					reason : 'CJge7PSOkdrWtxwl',
					text : 'tS0lbsLBo9d4mMna',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 100,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 87,
			),
			participants_count : 36,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 14,
			color : $client->peerColor(
				color : 43,
				background_emoji_id : 7351572389207878905,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -5471177314231407168,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 86,
			subscription_until_date : 43,
			bot_verification_icon : 360485369709386872,
			send_paid_messages_stars : 4689786473990222256,
			linked_monoforum_id : -5197848486765078321,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5168084851003517491,
			access_hash : 847590194753028655,
			title : '02iUNqTQSYm8lRko',
			until_date : 98,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8472030529593477998,
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
			id : -1677155448601134935,
			access_hash : -4680269719172950922,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tHLTcWvsACJGjOma',
					reason : 'pAUWKsjIt1eiQE5N',
					text : 'jirgG1KbmsARaQed',
				),
			),
			bot_inline_placeholder : 'qkKzv5EpycxIMlG0',
			lang_code : 'xeTZJbhMsfD6atwz',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 72,
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 4067639799637668841,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : -8367440011078929476,
			),
			bot_active_users : 73,
			bot_verification_icon : 7894161895048119739,
			send_paid_messages_stars : 5580208307819380016,
		),
	),
);
```