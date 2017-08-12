<?php

namespace Bezhanov\Faker\Provider;

use Faker\Provider\Base;

class Educator extends Base
{
    protected static $names = ['Marblewald', 'Mallowtown', 'Brookville', 'Flowerlake', 'Falconholt', 'Ostbarrow', 'Lakeacre', 'Clearcourt', 'Ironston', 'Mallowpond', 'Iceborough', 'Icelyn', 'Brighthurst', 'Bluemeadow', 'Vertapple', 'Ironbarrow'];
    protected static $secondaryTypes = ['High School', 'Secondary College', 'High'];
    protected static $tertiaryTypes = ['College', 'University', 'Technical College', 'TAFE'];
    protected static $tertiaryCourseSubjects = ['Arts', 'Business', 'Education', 'Applied Science (Psychology)', 'Architectural Technology', 'Biological Science', 'Biomedical Science', 'Commerce', 'Communications', 'Creative Arts', 'Criminology', 'Design', 'Engineering', 'Forensic Science', 'Health Science', 'Information Systems', 'Computer Science', 'Law', 'Nursing', 'Medicine', 'Psychology', 'Teaching'];
    protected static $tertiaryCourseTypes = ['Associate Degree in', 'Bachelor of', 'Master of'];

    public function university(): string
    {
        return sprintf('%s %s', static::randomElement(static::$names), static::randomElement(static::$tertiaryTypes));
    }

    public function secondarySchool(): string
    {
        return sprintf('%s %s', static::randomElement(static::$names), static::randomElement(static::$secondaryTypes));
    }

    public function course(): string
    {
        return sprintf('%s %s', static::randomElement(static::$tertiaryCourseTypes), static::randomElement(static::$tertiaryCourseSubjects));
    }

    public function campus(): string
    {
        return sprintf('%s Campus', static::randomElement(static::$names));
    }
}
