<?php

/**
 * @file
 * Contains Drupal\rng\EventManagerInterface.
 */

namespace Drupal\rng;

use Drupal\Core\Entity\EntityInterface;

/**
 * Event manager for RNG.
 */
interface EventManagerInterface {

  /**
   * ID of an `entity_reference` field attached to an event bundle.
   *
   * Specifies the registration type of registrations that can be created for
   * an event. This field references registration_type entities.
   */
  const FIELD_REGISTRATION_TYPE = 'rng_registration_type';

  /**
   * ID of an `entity_reference` field attached to an event bundle.
   *
   * Specifies the groups that are applied to new registrations. This field
   * references registration_group entities.
   */
  const FIELD_REGISTRATION_GROUPS = 'rng_registration_groups';

  /**
   * ID of an `boolean` field attached to an event bundle.
   *
   * Whether an event is accepting new registrations.
   */
  const FIELD_STATUS = 'rng_status';

  /**
   * ID of an `integer` field attached to an event bundle.
   *
   * The absolute maximum number of registrations that can be created
   * for an event. A negative or missing value indicates unlimited capacity.
   */
  const FIELD_CAPACITY = 'rng_capacity';

  /**
   * ID of an `email` field attached to an event bundle.
   *
   * Reply-to address for e-mails sent from an event.
   */
  const FIELD_EMAIL_REPLY_TO = 'rng_reply_to';

  /**
   * ID of an `boolean` field attached to an event bundle.
   *
   * Whether an event allows a registrant to associate with multiple
   * registrations. An empty value reverts to the site default.
   */
  const FIELD_ALLOW_DUPLICATE_REGISTRANTS = 'rng_registrants_duplicate';

  /**
   * Get the meta instance for an event.
   *
   * @param EntityInterface $entity
   *   An event entity.
   *
   * @return \Drupal\rng\EventMeta
   *   An event meta object.
   */
  public function getMeta(EntityInterface $entity);

  /**
   * Get event type config for an event bundle.
   *
   * Use this to test whether an entity bundle is an event type.
   *
   * @param string $entity_type
   *   An entity type ID.
   * @param string $bundle
   *   A bundle ID.
   *
   * @return \Drupal\rng\EventTypeConfigInterface|null
   */
  function event_type($entity_type, $bundle);

}