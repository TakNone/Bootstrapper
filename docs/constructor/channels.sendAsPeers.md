# channels.sendAsPeers

**Description** : *A list of peers that can be used to send messages in a specific group*

**Layer** : 222

```tl
channels.sendAsPeers#f496b0c6 peers:Vector<SendAsPeer> chats:Vector<Chat> users:Vector<User> = channels.SendAsPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<SendAsPeer>`](type/SendAsPeer) | Peers that can be used to send messages to the group |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[channels.SendAsPeers](type/channels.SendAsPeers)

---

## Example

```php
$channelsSendAsPeers = $client->channels->sendAsPeers(
	peers : array(
		$client->sendAsPeer(
			premium_required : true,
			peer : $client->peerUser(
				user_id : 6145199958819240541,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 481367942703292434,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 73967919599734202,
			title : 'ZYGcEWo0mBrqvRPD',
			photo : $client->chatPhotoEmpty(),
			participants_count : 98,
			date : 13,
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
				until_date : 61,
			),
		),
		$client->chatForbidden(
			id : -6233096384237422652,
			title : '4yziHK9xahDc5uCR',
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
			id : 6380942645836031426,
			access_hash : -767033871983553503,
			title : 'HZC3bgwJrIKWEY0i',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CQ6V1mfrshYDe2XO',
					reason : 'ctpeE7aW1FZmroRg',
					text : 'uDevcM7stBiApIf6',
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
				until_date : 61,
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
				until_date : 24,
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
				max_id : 91,
			),
			color : $client->peerColor(
				color : 97,
				background_emoji_id : -8068383918219852172,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -6364733622764375386,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 21,
			subscription_until_date : 70,
			bot_verification_icon : -756638062070915069,
			send_paid_messages_stars : -4718101361449084455,
			linked_monoforum_id : -5204602275803152598,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6362699242674017837,
			access_hash : -7381065418303449800,
			title : 'XlN9yQZe4xSbMk3E',
			until_date : 86,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1071281910147928939,
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
			id : -7864086161014421511,
			access_hash : -1087582893823991198,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DIN6EphqOgumjCP3',
					reason : 'omyeREWA5hSIM0JV',
					text : 'fmyZihUGQw9Vc63Y',
				),
			),
			bot_inline_placeholder : 'iW8pbnaXvORILAxu',
			lang_code : 'G0BE1Xh8Rmriyz9U',
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
				max_id : 25,
			),
			color : $client->peerColor(
				color : 17,
				background_emoji_id : 8889065031819767915,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : -7762801948349538435,
			),
			bot_active_users : 5,
			bot_verification_icon : -899120326018988518,
			send_paid_messages_stars : -1236031285734587627,
		),
	),
);
```