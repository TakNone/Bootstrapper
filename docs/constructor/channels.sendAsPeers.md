# channels.sendAsPeers

**Description** : *A list of peers that can be used to send messages in a specific group*

**Layer** : 218

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
				user_id : 7596627244456871698,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1497768245267237727,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5684167923332163382,
			title : 'm4k6WbQDX3uaCTzV',
			photo : $client->chatPhotoEmpty(),
			participants_count : 12,
			date : 20,
			version : 92,
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
				until_date : 5,
			),
		),
		$client->chatForbidden(
			id : -3031953582856382931,
			title : '4faOx5rZcid2qF7T',
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
			id : 2929468920247332359,
			access_hash : 3974699297599725627,
			title : 'V7g3Dk1cAm2eNUTQ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yaAv6NzUge0t1bj9',
					reason : '3pIdUQSaJrOgBxcl',
					text : 'jUbI5dPMwkals9ni',
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
				until_date : 69,
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
				until_date : 60,
			),
			participants_count : 93,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 32,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -724786304580976552,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : -2161077909746396120,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 82,
			subscription_until_date : 42,
			bot_verification_icon : -4138904032260432744,
			send_paid_messages_stars : 3678981364672215622,
			linked_monoforum_id : 944089082919149041,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5821260512382252567,
			access_hash : 1140288072870440975,
			title : '0YmTxbCL9sIkguz7',
			until_date : 20,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1126714338035632221,
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
			id : 8254618021837731472,
			access_hash : -2751824920628281528,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 26,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tBUjoeDyqQlJkLMb',
					reason : 'TigqwfNLj3dXCGzP',
					text : 'VJfPTEpsNziZ73Sh',
				),
			),
			bot_inline_placeholder : 'ObFxEsP2CIAihVB0',
			lang_code : 'MB4HeqdcpoQKEw0Y',
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
				color : 97,
				background_emoji_id : 7124609518056427159,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 8872823070795800135,
			),
			bot_active_users : 74,
			bot_verification_icon : -3614521606796136782,
			send_paid_messages_stars : 3881769315116076453,
		),
	),
);
```