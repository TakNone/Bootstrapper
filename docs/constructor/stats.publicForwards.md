# stats.publicForwards

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 227

```tl
stats.publicForwards#93037e20 flags:# count:int forwards:Vector<PublicForward> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stats.PublicForwards;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results |
| <mark>forwards</mark> | [`Vector<PublicForward>`](type/PublicForward) | Info about the forwards of a story |
| **next_offset** | [`flags.0?string`](type/string) | Offset used for pagination |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stats.PublicForwards](type/stats.PublicForwards)

---

## Example

```php
$statsPublicForwards = $client->stats->publicForwards(
	count : 78,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 47,
				peer_id : $client->peerUser(
					user_id : -8519621312213815787,
				),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : 8126659670567683596,
			),
			story : $client->storyItemDeleted(
				id : 56,
			),
		),
	),
	next_offset : 'GX4ETiQg06f8LhA2',
	chats : array(
		$client->chatEmpty(
			id : 7588265846540127849,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7682680533873823780,
			title : 'GCYoEg5ypfIiuTPA',
			photo : $client->chatPhotoEmpty(),
			participants_count : 95,
			date : 100,
			version : 1,
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
				until_date : 56,
			),
		),
		$client->chatForbidden(
			id : 4166785058473148655,
			title : '7XVUtjgy1zF4wHOa',
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
			id : 531723533993254902,
			access_hash : -8142613033826456814,
			title : '9hdkDTvwqMWzuBKb',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xrcztBydqhvG9DZo',
					reason : 'dDo1C56ZBpPbSg9V',
					text : 'RBg09ruTGMmc1pqF',
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
				until_date : 91,
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
				until_date : 22,
			),
			participants_count : 9,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 13,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : 8578601666729238861,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : -8859419735844123522,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 50,
			subscription_until_date : 51,
			bot_verification_icon : -427160246408168641,
			send_paid_messages_stars : 4263863971012583012,
			linked_monoforum_id : 1662212149778920529,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6130174322499202205,
			access_hash : 156007095329648260,
			title : 'frnQlZzos42K9IOY',
			until_date : 83,
		),
	),
	users : array(
		$client->userEmpty(
			id : 9178373680961452181,
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
			id : -382037400161203354,
			access_hash : -4024679865030420001,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3C4A60YjZVkoBbRJ',
					reason : 'ADHEMsrcJIT4wZiG',
					text : 'GT9MCbhW4n6SU2tV',
				),
			),
			bot_inline_placeholder : 'RzOEFYq0UpMoLaQB',
			lang_code : 'YJKwCuaZNFTcBvmk',
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
				max_id : 80,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -4158602011803001904,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : 8698965181601847015,
			),
			bot_active_users : 55,
			bot_verification_icon : -3804604626078819872,
			send_paid_messages_stars : 1929778617255617614,
		),
	),
);
```