# stats.publicForwards

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 218

```tl
stats.publicForwards#93037e20 flags:# count:int forwards:Vector<PublicForward> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stats.PublicForwards;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 48,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 69,
				peer_id : $client->peerUser(
					user_id : 6261236661224292448,
				),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : -6244232007288041974,
			),
			story : $client->storyItemDeleted(
				id : 1,
			),
		),
	),
	next_offset : 'ljmK4JSuOiAVoced',
	chats : array(
		$client->chatEmpty(
			id : 2369056048045531786,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8151164018730661935,
			title : 'wKm7ZVdA9nTUohfl',
			photo : $client->chatPhotoEmpty(),
			participants_count : 22,
			date : 37,
			version : 91,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 99,
			),
		),
		$client->chatForbidden(
			id : -4154678915978219266,
			title : '5UsZBf0XFhnk1bVc',
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
			id : -6525720162648604456,
			access_hash : -7731844667334514974,
			title : 'Tq1iPlCfspJonyte',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 74,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tNpL2YaUG1xWf894',
					reason : 'oGXI9Cjas8J210iB',
					text : 'whRdQYLPDMTsFtoS',
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
				until_date : 54,
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
				until_date : 98,
			),
			participants_count : 64,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 25,
			),
			color : $client->peerColor(
				color : 31,
				background_emoji_id : 570089083057163995,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : 1835770729748169336,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 84,
			subscription_until_date : 8,
			bot_verification_icon : 7125342301908938792,
			send_paid_messages_stars : -2858934849502123830,
			linked_monoforum_id : 3058645730866683726,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3225914025950383331,
			access_hash : 7964639256869675615,
			title : 'uTjV5iR76GfoS0qd',
			until_date : 3,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1481109910890892316,
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
			id : 506781534980344332,
			access_hash : -3523455882452360600,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tX40Ljzv6GOA3rRk',
					reason : 'e8pAtyZ3rKR4UQWD',
					text : 'LV8FDz72Axtmp1kS',
				),
			),
			bot_inline_placeholder : '1VanemqEzp9hwt6v',
			lang_code : '4axqbk5VRTXPmF78',
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
				max_id : 68,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : 3467981442582964674,
			),
			profile_color : $client->peerColor(
				color : 7,
				background_emoji_id : 4324460155880229545,
			),
			bot_active_users : 62,
			bot_verification_icon : 4526882405557902613,
			send_paid_messages_stars : 3059396907470447294,
		),
	),
);
```