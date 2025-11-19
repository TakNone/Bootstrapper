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
	count : 36,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 60,
				peer_id : $client->peerUser(
					user_id : 4248829969990625111,
				),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : -1022652163902597732,
			),
			story : $client->storyItemDeleted(
				id : 4,
			),
		),
	),
	next_offset : 'c1e7RLMPBFkHJlbd',
	chats : array(
		$client->chatEmpty(
			id : -4698619227347265409,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3067452271908875721,
			title : 'owOqYely9MsxS8CW',
			photo : $client->chatPhotoEmpty(),
			participants_count : 58,
			date : 36,
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
				until_date : 81,
			),
		),
		$client->chatForbidden(
			id : 4521983227965153296,
			title : '1rPyuodqQeEUvXfB',
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
			id : -4167629929702836216,
			access_hash : 3729332777392565417,
			title : 'ojzTZP0DkB1Hrx2m',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'g4OLXicVeuH12Qny',
					reason : '6CtIfUQbGydrxTNF',
					text : 'vWoyzONCwmRsUFBM',
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
				until_date : 97,
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
				until_date : 34,
			),
			participants_count : 90,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 84,
			),
			color : $client->peerColor(
				color : 66,
				background_emoji_id : 2554723853712611638,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : -1542515206932631293,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 95,
			subscription_until_date : 96,
			bot_verification_icon : -4532055131946908767,
			send_paid_messages_stars : 7338005523367174089,
			linked_monoforum_id : -6101993392859011637,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1940598238601886287,
			access_hash : -493094403016420029,
			title : '752jVdiW9uhenYr4',
			until_date : 1,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2527246522745132550,
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
			id : -7130727863534217402,
			access_hash : -5070211881492057331,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PeKycR1T0fs45aZN',
					reason : 'mYrFEOBX42sqV0GM',
					text : 'P8MxN0521QKrAGfE',
				),
			),
			bot_inline_placeholder : '5Azs32rEKay4H0Sv',
			lang_code : 'HgXhYyGuLP5SMIc0',
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
				max_id : 98,
			),
			color : $client->peerColor(
				color : 11,
				background_emoji_id : -7479417200694814039,
			),
			profile_color : $client->peerColor(
				color : 7,
				background_emoji_id : 7345924934160242144,
			),
			bot_active_users : 70,
			bot_verification_icon : 2099118739577147845,
			send_paid_messages_stars : -3274421057704494057,
		),
	),
);
```