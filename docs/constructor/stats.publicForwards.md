# stats.publicForwards

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 211

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
	count : 9,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 93,
				peer_id : $client->peerUser(...),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : 3882985656309020950,
			),
			story : $client->storyItemDeleted(
				id : 0,
			),
		),
	),
	next_offset : 'QYDGMuXwk6il8T73',
	chats : array(
		$client->chatEmpty(
			id : 8332265774416768414,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3004016693969141577,
			title : 'jCSFRXsGDA8PfZyr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 7,
			date : 50,
			version : 51,
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
				until_date : 22,
			),
		),
		$client->chatForbidden(
			id : 7579291675309214445,
			title : 'n2GXRMcs8V0dOFU7',
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
			id : -4403539097903374449,
			access_hash : -1009247410292437749,
			title : 'mPlv7SVhQ4sukNWy',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PNpayuSoGID6nYJt',
					reason : 'KGRp46kMJidUb7f5',
					text : 'Rb7P4hFcHB2mrZp5',
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
				until_date : 63,
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
				until_date : 52,
			),
			participants_count : 25,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 52,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : 6545325493111998927,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : -315948626935441784,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 11,
			subscription_until_date : 84,
			bot_verification_icon : 8873544722924691713,
			send_paid_messages_stars : 8867221602163691302,
			linked_monoforum_id : -7896061076484715142,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1260038369011370219,
			access_hash : -334468786799094406,
			title : 'Llgwad2vTAjbcF7o',
			until_date : 93,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5035713742850195431,
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
			id : 4287568762214032386,
			access_hash : -3929306270401221618,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'O4uj05YUgrtzG6He',
					reason : 'sQx8deNOfIq2G3uo',
					text : 'kGbd53PIHVhSXqz1',
				),
			),
			bot_inline_placeholder : 'Vjeh3txvcR7QXgDM',
			lang_code : 'pvs4B1fV3TtRKGma',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 29,
			color : $client->peerColor(
				color : 97,
				background_emoji_id : 8735230801601525826,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 6256940189471604360,
			),
			bot_active_users : 51,
			bot_verification_icon : 4915076772508967392,
			send_paid_messages_stars : -2060014776849046427,
		),
	),
);
```