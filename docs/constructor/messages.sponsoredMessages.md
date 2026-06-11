# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 227

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **posts_between** | [`flags.0?int`](type/int) | If set, specifies the minimum number of messages between shown sponsored messages; otherwise, only one sponsored message must be shown after all ordinary messages |
| **start_delay** | [`flags.1?int`](type/int) | For sponsored messages to show on channel videos », the number of seconds to wait before showing the first ad |
| **between_delay** | [`flags.2?int`](type/int) | For sponsored messages to show on channel videos », the number of seconds to wait after the previous ad is hidden, before showing the next ad |
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
	posts_between : 36,
	start_delay : 17,
	between_delay : 25,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'LS0b5tDwVkMaRsZy',
			message : '86gqMsNDLVABYkEd',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 58,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 57,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 33,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 0,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 1,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 88,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 29,
					language : 'icTMsqbdjagA56NP',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 10,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 60,
					user_id : -6431499310946905148,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 47,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 42,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 35,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 12,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 74,
					document_id : 3920453154337195596,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 81,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 42,
					date : 55,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 75,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 22,
					old_text : 'qOwmcLCV9BidtHIY',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 63,
				),
			),
			photo : $client->photoEmpty(
				id : -7911303711714960513,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 46,
				background_emoji_id : -1903496443107946075,
			),
			button_text : 'dL7KgwxRE2jbCNWa',
			sponsor_info : 'cvHL42lJZ1Mqbfi5',
			additional_info : '0rhiYVRTQ1q4gjeB',
			min_display_duration : 8,
			max_display_duration : 6,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7035044439721520568,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3703900363739049308,
			title : 'xWEosV92bPeOmg30',
			photo : $client->chatPhotoEmpty(),
			participants_count : 80,
			date : 50,
			version : 27,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 50,
			),
		),
		$client->chatForbidden(
			id : -4805185500526739556,
			title : 'pjgb4ulGEQntHwTk',
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
			id : 5629157636086889127,
			access_hash : 4153770692866484961,
			title : 'vAVYJfz1GyWswgKp',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'i81xekMCftqXOwQW',
					reason : 'Ndpu97tzmQA3H1UL',
					text : 'pfx5WO1NoymlaiKR',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 3,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 56,
			),
			participants_count : 71,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 57,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -7378925839776505420,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : 2769291903274646518,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 1,
			subscription_until_date : 54,
			bot_verification_icon : 7400872533162129789,
			send_paid_messages_stars : -7318627117796355891,
			linked_monoforum_id : -5852454845062688211,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 2882975407509943216,
			access_hash : 9170387284828460358,
			title : 'wZMKevWqOydG4bT9',
			until_date : 5,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1667991500592322211,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 843698037059860053,
			access_hash : 9165974679685876616,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tjDqVOIcUzPrBsRp',
					reason : 'BywsbqAjQ28Se9do',
					text : 'fkRWF5cBVw9ira7Y',
				),
			),
			bot_inline_placeholder : 'LTS9sqAfC5ga68Zy',
			lang_code : 'uW3YrKDaOi5GkemU',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 83,
			),
			color : $client->peerColor(
				color : 85,
				background_emoji_id : 7213927900170288980,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : -2541281271403085096,
			),
			bot_active_users : 16,
			bot_verification_icon : 7242690575890617773,
			send_paid_messages_stars : -6870345122321503272,
		),
	),
);
```