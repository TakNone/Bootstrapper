# contacts.blockedSlice

**Description** : *Incomplete list of blocked users*

**Layer** : 222

```tl
contacts.blockedSlice#e1664194 count:int blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of elements in the list |
| <mark>blocked</mark> | [`Vector<PeerBlocked>`](type/PeerBlocked) | List of blocked users |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Blocked chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->blockedSlice(
	count : 45,
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : -6633147296102513595,
			),
			date : 19,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6136321180827158916,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5267514404543683423,
			title : 'yAgUQZnmENuwCKYH',
			photo : $client->chatPhotoEmpty(),
			participants_count : 52,
			date : 96,
			version : 38,
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
				until_date : 68,
			),
		),
		$client->chatForbidden(
			id : -7117700719325735107,
			title : 'idGIVnXuLbePBqA2',
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
			id : 2251268398536487237,
			access_hash : 8355592739035425904,
			title : 'AnC0GEwtc6aZv1Kl',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cy3VW5oLsmxN1EuY',
					reason : '4Nl6k1scP9AmWGJH',
					text : 'kLw2lKPHB0gnh9bj',
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
				until_date : 72,
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
				until_date : 54,
			),
			participants_count : 37,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 82,
			),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : 2886178178460644936,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : -8381017721976870293,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 84,
			subscription_until_date : 50,
			bot_verification_icon : -7780423144234813103,
			send_paid_messages_stars : 8697455230359914652,
			linked_monoforum_id : 8811395705564469752,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3678117350332109662,
			access_hash : 3114476702303381269,
			title : 'HgjDJGdp9aWlBITK',
			until_date : 65,
		),
	),
	users : array(
		$client->userEmpty(
			id : 903783463706300139,
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
			id : 866852760927450695,
			access_hash : -3376343542269018831,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5YcHzCAKOUlsjI41',
					reason : 'MWPtOCwsqzyA60HJ',
					text : 'bJNm9OwdXF4Beyk8',
				),
			),
			bot_inline_placeholder : '5uE7JnARpPqX3ywz',
			lang_code : 'H7EStQmJfGUApyir',
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
				max_id : 64,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 3677638903102531563,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : 102769589606027728,
			),
			bot_active_users : 70,
			bot_verification_icon : -7243651702992658806,
			send_paid_messages_stars : -1684843291178922598,
		),
	),
);
```